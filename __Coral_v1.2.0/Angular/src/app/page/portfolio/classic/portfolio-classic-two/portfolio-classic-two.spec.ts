import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioClassicTwo } from './portfolio-classic-two';

describe('PortfolioClassicTwo', () => {
  let component: PortfolioClassicTwo;
  let fixture: ComponentFixture<PortfolioClassicTwo>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioClassicTwo]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioClassicTwo);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
