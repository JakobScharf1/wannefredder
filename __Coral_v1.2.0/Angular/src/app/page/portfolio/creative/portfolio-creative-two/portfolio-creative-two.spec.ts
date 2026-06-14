import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioCreativeTwo } from './portfolio-creative-two';

describe('PortfolioCreativeTwo', () => {
  let component: PortfolioCreativeTwo;
  let fixture: ComponentFixture<PortfolioCreativeTwo>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioCreativeTwo]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioCreativeTwo);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
