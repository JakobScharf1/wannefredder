import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioClassicSix } from './portfolio-classic-six';

describe('PortfolioClassicSix', () => {
  let component: PortfolioClassicSix;
  let fixture: ComponentFixture<PortfolioClassicSix>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioClassicSix]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioClassicSix);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
